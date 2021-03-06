<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chipper News</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <script src="{$BASE_URL}js/endlessScrolling.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-frontpage.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Lora|Playfair+Display:700" rel="stylesheet">
</head>
<body>
   <span class="base_url" id="base_url" hidden>{$BASE_URL}</span>
   <div id="featuredBar">
    <nav class="navbar navbar-default ">
        <h1 class="text-center "> Featured </h1>
    </nav>
    </div>
    <div class="row " style="padding-left:4%;padding-right:4% " id="featuredArticles">
       {for $i=0 to 2}
            {$art = $articles[$i] }
            {$subcategories = fetchSubcategories($art.article_id)}
            <div class="col-sm-6 col-md-4 ">
                <a class="thumbnail " href="{$BASE_URL}pages/articles/article.php?id={$art.article_id}" style="text-decoration:none ">
                    <img src="{$BASE_URL}images/articles/{$art.article_id}" alt="... ">
                    <div id="ratings">
                        <span id="postext4" style="color:#357266">{$art.posratings}</span>
                        <span class="btn btn-default btn-circle btnlike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;"> 
                        </span>
                        <span id="negtext4" style="color:#f11066">{$art.negratings}</span>
                        <span class="btn btn-default btn-circle btndislike">
                        <img src="{$BASE_URL}images/assets/chipart1.png" alt="" style="width:100%;height:100%;filter:hue-rotate(198deg);"> 
                        </span>
                        
			        </div>
                    
                    <div class="caption ">
                        <h3>{$art.title}</h3>
                        <h6>By <span style="color:black; font-style:italic">{$art.authorname}</span> {$art.published_date}</h6>
                        <p>{$art.lead}</p>
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
                    </div>
                </a>
            </div>
        {/for}
    </div>

    <nav class="navbar navbar-default ">
        <h1 class="text-center " > News </h1>
    </nav>
    <div class="row " style="padding-left:4%;padding-right:4% " id="appendArticles">
       
    </div>
    <br><br>
</body>

</html>