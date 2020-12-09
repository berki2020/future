<hr>
<p class="form_comment">Оставить комментарий</p>
<form action="" method="POST">
    <lable class="your_comment">Ваше имя</lable><br>
    <input class="input_1" type="text" name="author" value="<?= $_POST['author'] ?? ''; ?>"><br>
    <lable class="your_comment">Ваш комментарий</lable><br>
    <textarea class="rectangle" name="text" minlength="30"><?= $_POST['text'] ?? ''; ?></textarea><br>
    <input class="btn_1" type="submit" name="submit">
</form>
</div>
</section>
<footer>
    <div class="container">
        <div class="d-flex flex-row">
            <div class="bot_picture">
            </div>
            <div class="bot_text">
                <p class="phone">Телефон: (499) 340-94-71</p>
                <p class="email">Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
                <p class="adress">Адрес: <a href="">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></p>
                <span class="copyright">© 2010 - 2014 Future. Все права защищены</span>
            </div>

        </div>
    </div>
</footer>
</body>
</html>