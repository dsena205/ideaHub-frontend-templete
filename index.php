<?php 
    include_once 'include/header.php';
?>
    
    <main>
        <h1 class="bem-vindo">Bem vindo usuário!</h1>
        <!-- Post - article -->
        <article class="card">
             <!-- Header do Post -->
             <header class="cardHeader">
                <!-- foto e nome usuario -->
                <div>
                    <span class="material-symbols-outlined">person</span>
                    <span>Usuario</span>
                </div>
                <!-- Titulo -->
                <h2>Titulo</h2>
                <!-- Data -->
                <span>12/12/1212</span>
             </header>

             <!-- Texto do Post -->
             <p class="cardText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent consequat tortor quam, sed feugiat ipsum convallis nec. Suspendisse ligula massa, interdum ut diam facilisis, efficitur consectetur mi. Vestibulum facilisis sem arcu. Sed hendrerit, dolor quis accumsan molestie, augue ipsum elementum tortor, non egestas ante eros et purus. Proin euismod lacus nunc, quis porttitor purus tristique nec. Fusce ultrices ex et eros scelerisque accumsan. Fusce lobortis dui quis blandit accumsan.</p>

             <!-- footer do post -->
             <footer class="cardFooter">
                <span class="material-symbols-outlined">favorite</span>
                <span class="material-symbols-outlined">mode_comment</span>
                <span class="material-symbols-outlined">bookmark</span>
             </footer>
        </article>
    </main>

<?php 
    include_once 'include/footer.php';
?>

