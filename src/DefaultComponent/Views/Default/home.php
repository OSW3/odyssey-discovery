<?php $this->layout('base', [
    'title' => 'Homepage'
]) ?>



<?php $this->start('main_content') ?>

    <div id="welcome">
        <h1>
            <small>Welcome to</small><br>
            <span class="brand"><span class="brand-name">odyssey</span> <span class="brand-version">discovery</span></span>
        </h1>
    </div>

<?php $this->stop('main_content') ?>





<?php $this->start('stylesheets') ?>
<style>
    html, body {
        font-size: 1rem;
    }

    .brand {
        font-size: 100%;
        
        .brand-name {
            font-family: 'Dead Island';
            font-size: 150%;
        }
        .brand-version {
            font-size: 100%;
        }
    }

    #welcome {
        background-color: #dddddd;
        border: 1px solid red;
        border-radius: 10px;
        padding: 3rem;
        position: absolute;

        top: 4rem;
        left: 50%;
        margin-left: -250px;
        width: 500px;
    }
</style>
<?php $this->stop('stylesheets') ?>