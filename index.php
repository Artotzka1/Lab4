<?php include 'header.html'; ?>

<main class="home">
    <div class="form-container">
        <h2>Форма обратной связи</h2>
        <form action="home.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullname">ФИО:</label>
                <input type="text" id="fullname" name="fullname" value="<?php echo htmlspecialchars($_GET['fullname'] ?? ''); ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Ваша почта:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_GET['email'] ?? ''); ?>" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" rows="4" required><?php echo htmlspecialchars($_GET['message'] ?? ''); ?></textarea>
            </div>

            <div class="form-group">
                <label for="type">Тема обращения:</label>
                <select id="type" name="type" required>
                    <option value="Предложение" <?php echo ($_GET['type'] ?? '') == 'Предложение' ? 'selected' : ''; ?>>Предложение</option>
                    <option value="Жалоба" <?php echo ($_GET['type'] ?? '') == 'Жалоба' ? 'selected' : ''; ?>>Жалоба</option>
                </select>
            </div>

            <div class="form-group">
                <label>Откуда вы про нас узнали?:</label>
                <div class="radio-group">
                    <input type="radio" id="internet" name="source" value="Реклама из интернета" <?php echo ($_GET['source'] ?? '') == 'Реклама из интернета' ? 'checked' : ''; ?>>
                    <label for="internet">Реклама из интернета</label>

                    <input type="radio" id="friends" name="source" value="Рассказали друзья" <?php echo ($_GET['source'] ?? '') == 'Рассказали друзья' ? 'checked' : ''; ?>>
                    <label for="friends">Рассказали друзья</label>
                </div>
            </div>

            <div class="form-group">
                <label for="agreement">
                    <input type="checkbox" id="agreement" name="agreement" required>
                    Даю согласие на обработку данных
                </label>
            </div>

            <div class="form-group">
                <label for="file">Прикрепить файл:</label>
                <input type="file" id="file" name="file">
            </div>

            <button type="submit">Отправить</button>
        </form>
    </div>
</main>

</body>
</html>
