<?php
class ArticleController{
    public function newArticleAction(){
        require 'Vue/newArticle.php';
    }

    public function formAction(){
        $articleManager = new ArticleManager();
        $article =  new Article(null, $_POST['title'], $_POST['text']);
        $articleManager->insertArticle($article);
        header('Location: http://localhost/exempleMVC/index.php?controller=index&action=renderIndex');
    }
}
?>