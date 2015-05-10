<main id="wrapper">
    <section class="category" style="padding:20px;height: auto; text-align: center">
        <img src="./images/max.gif" alt="" style="display: inline-block; margin-right: 20px;vertical-align: middle"/>
        <?php if(isset($_GET['error'])){
            echo ("<span style='display: inline-block;height: 100%;font-size: 20px;'>" . $_GET['error'] . "</span>");
        }?>
    </section>
</main>