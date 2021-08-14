$(document).ready(function(){
    sortAndFilter()
    $(".page-link-item").click(loadMorePosts);
    $(".categories").click(sortAndFilter);
    $(".btnDate").click(sortAndFilter);
    $("#search").keyup(sortAndFilterWithSearch);

});

var categories = [];

function loadMorePosts(e){
    categories = [];
    $.each($("input[name='categories']:checked"), function(){
        categories.push($(this).val());
    });
    let sortValue = $("input[name=btnDate]:checked").val();
    e.preventDefault();
    let page = $(this).data("page");
    //console.log(page);
    getPosts(page,categories,sortValue);
}

function sortAndFilter() {
    let sortValue = $("input[name=btnDate]:checked").val();
    categories = [];
    $.each($("input[name='categories']:checked"), function(){
        categories.push($(this).val());
    });
    let srcKey = $("#search").val();
    getPosts(1,categories, sortValue);
}

function sortAndFilterWithSearch() {
    let sortValue = $("input[name=btnDate]:checked").val();
    categories = [];
    $.each($("input[name='categories']:checked"), function(){
        categories.push($(this).val());
    });
    let srcKey = $("#search").val();
    searchPosts(1,categories, srcKey, sortValue);
}

function getPosts(page, categories, sortValue){
    //console.log(categories);
    const caller = arguments.callee.caller.name;
    $.ajax({
        url: "/posts/fetch",
        method: "GET",
        data: {
            page,
            categories,
            sortValue
        },
        dataType: "json",
        success: function (response) {
            // console.log(response.data);

            showPosts(response.data);

            if(caller == 'sortAndFilter'){
                changePagination(response.last_page, response.current_page);
            }
            if(caller == 'loadMorePosts'){
                changeActivePageLink(response.current_page);
            }
        }
    });
}

function searchPosts(page, categories, srcKey, sortValue){
    //console.log(categories);
    const caller = arguments.callee.caller.name;
    $.ajax({
        url: "/posts/search",
        method: "GET",
        data: {
            page,
            categories,
            srcKey,
            sortValue
        },
        dataType: "json",
        success: function (response) {
            console.log(response.data);

            showPosts(response.data);

            if(caller == 'sortAndFilterWithSearch'){
                changePagination(response.last_page, response.current_page);
            }
            if(caller == 'loadMorePosts'){
                changeActivePageLink(response.current_page);
            }
        }
    });
}



function changePagination(totalLinks, currentPage){
    let html = "";
    for(let i = 1; i <= totalLinks; i++){
        if(i != currentPage){
            html += `<li class="page-item"><a class="page-link-item" id="link${i}" data-page="${i}" href="#">${i}</a></li>`;
        }else{
            html += `<li class="page-item active"><a class="page-link-item" id = "link${i}" data-page="${i}" href="#">${i}</a></li>`;
        }
    }
    $(".pagination-js").html(html);
    $(".page-link-item").click(loadMorePosts);
}

function changeActivePageLink(currentPage){
    $('.page-item').removeClass('active');
    $('#link' + currentPage).parent().addClass('active');
}

function showPosts(posts){
    let html = "";
    let date = "";
    for(let post of posts) {
        date = new Date(post.created_at);
        html += `
        <div class="col-lg-6">
            <div class="blog-post">
            <div class="blog-thumb">
                <img src="${urlImg}/${post.image}" alt="${post.title}">
            </div>
            <div class="down-content">
                <a href="/posts/${post.id}"><h4>${post.title}</h4></a>
                <ul class="post-info">
                <li><a href="#">${post.user.username}</a></li>
                <li><a href="#">${date.getDate() + '-' + (date.getMonth()+1) + '-' + date.getFullYear()}</a></li>
                <li><a href="#">${post.comments.length} comments</a></li>
                </ul>
                <hr/>
                <div class="post-options">
                <div class="row">
                    <div class="col-lg-12">
                    <ul class="post-tags">
                        <li><i class="fa fa-tags"></i></li>
                        <li><a href="#">`;
                        for (category in post.categories) {
                            html += `${post.categories[category].name}`;
                        }
                        html += `
                        </a></li>
                        
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>`;
    }
    $("#posts").html(html);
}
