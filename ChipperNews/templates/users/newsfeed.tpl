<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Newsfeed</title>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-newsfeed-myarticles.css">
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://www.w3schools.com/lib/w3data.js"></script>
	<script src="{$BASE_URL}js/bootstrap.min.js"></script>
	<script src="{$BASE_URL}js/newsfeedJS.js"></script>
 
</head>

<body>
   <span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
	<div id="bg">
			<img class="bg" src="{$BASE_URL}/images/assets/circuit.jpg" alt="">
		</div>
		<div class="container-fluid" id="feedheader">
			<h1 class="nf">Newsfeed</h1>
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown" id="dropdownbutton" aria-expanded="false"><span class="droptext">Me</span>
		<span class="caret caret-reversed"></span> 
		</button>
				<ul class="dropdown-menu dropdown-menu-right" role="menu">
					<li><a href="#" onclick="changeDropdown('Me')">Me</a></li>
					<li><a href="#" onclick="changeDropdown('Mixed')">Mixed</a></li>
					<li><a href="#" onclick="changeDropdown('Friends')">Friends</a></li>
				</ul>
			</div>
		</div>
	<div class="allcontent">
        {foreach $articles as $article}
		<div class="container article-snip friend" id="article-snip-{$article.article_id}">
            {$likedarray = null} 
            {$wholiked = fetchWhoLiked($smarty.session.user_id,$article.article_id)}
            {if sizeof($wholiked)>0}
            <br>
                {foreach $wholiked as $liked}
                    {if $liked.user_id1!=$smarty.session.user_id}
                    {$likedarray = appendFriend($liked.user2_name,$likedarray)}
                    {else}
                    {$likedarray = appendFriend($liked.user1_name,$likedarray)}
                    {/if}
                {/foreach}
           
            <p>
            {foreach $likedarray as $friend name=foo}
            
            {if $smarty.foreach.foo.last}
            <span style="color:#357266;font-weight:bold;">{$friend} </span> find this article just chipper!
            {else}
            <span style="color:#357266;font-weight:bold;">{$friend},</span>
            {/if} 
          
            {/foreach}
             </p>
            {/if}
			{if dateDiffDays($article.published_date)<100 && $article.archived==false}
            <h2 id="headline"><a href="{$BASE_URL}pages/articles/article.php?id={$article.article_id}" style="color:black" id="articleAnchor">{$article.title}</a></h2>
            {else}
            <h2 id="headline" ><a href="{$BASE_URL}pages/articles/article.php?id={$article.article_id}" style="color:grey" id="articleAnchor">Archived:{$article.title}</a></h2>
            {/if}
			<h6>By <a href="{$BASE_URL}pages/users/view_profile?usr={$article.authorusername}" style="color:black; font-style:italic">{$article.authorname}</a> {$article.published_date}</h6>
            {$subcategories = fetchSubcategories($article.article_id)}
			 {foreach $subcategories as $subart}
                            {if $subart.category==1}
                                <span class="label label-primary ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==2}
                                <span class="label label-warning ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==3}
                                <span class="label label-info ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==4}
                                <span class="label label-default ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==5}
                                <span class="label label-danger ">{$subart.name}</span>
                            {/if}
                            {if $subart.category==6}
                                <span class="label label-success ">{$subart.name}</span>
                            {/if}     
            {/foreach}
			<h3 id="lead">{$article.lead}</h3>
            <div id="ratings">
                    <span id="postext4" style="color:#357266">{$article.posratings}</span> 
                    <button type="button" id="like" class="btn btn-default btn-circle btnlike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
					</button>
					<span id="negtext4"  style="color:#f11066">{$article.negratings}</span>
					<button type="button" id="dislike" class="btn btn-default btn-circle btndislike" disabled>
					<img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
					</button>
            </div>
		<br>
		<a onclick="fullStory('{$article.article_id}')" style="text-decoration:none"><i class="fa fa-chevron-circle-down expand fa-2x" id="expand-{$article.article_id}" aria-hidden="true"></i></a>
		<div id="article-body-{$article.article_id}" hidden>
             {$article.content}
         <a onclick="deflateArticle('{$article.article_id}')" style="text-decoration:none"><i class="fa fa-chevron-circle-up deflate fa-2x" aria-hidden="true"></i></a>
        </div>
        <br>
    </div>
    <br>
    {/foreach}
    </div>
</body>