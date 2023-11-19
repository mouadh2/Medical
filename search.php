<form action="chercher.php" method="post"
<div class="div1">
<input type="text" placeholder="Recherche..." name="title">
     <div class="div2">
     <button class="btn1" type="submit" name="submit">
        <i></i>
    </button>
    </div>
</div>
</form>
<li>
<a href="#"  role="button">
    <span><?php echo $nom .' ' .$prenom; ?></span>
</a>
<div >
    <a  href="#">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
                </a>
                    <a href="#">
                        <i ></i>
                            Logout
                    </a>
</div>

</li>