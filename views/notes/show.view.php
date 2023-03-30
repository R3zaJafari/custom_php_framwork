
<?php include(__DIR__ .'/../partials/head.php');  ?>
<?php include(__DIR__ .'/../partials/nav.php');   ?>
<?php include(__DIR__ .'/../partials/banner.php');?>


        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <li class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </li>

                <div class="mt-3 text-blue-500 hover:underline">
                    <a href="/notes">go back ...</a>
                </div>
              
            </div>
        </main>


        <?php include('views/partials/footer.php') ?> 