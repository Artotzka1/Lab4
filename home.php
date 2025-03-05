<?php
$fullname = $_POST['fullname'] ?? 'Не указано';
$email = $_POST['email'] ?? 'Не указано';
$message = $_POST['message'] ?? 'Не указано';
$type = $_POST['type'] ?? 'Не указано';
$source = $_POST['source'] ?? 'Не указано';
$file = $_FILES['file']['name'] ?? 'Файл не прикреплен';
?>

<?php include 'header.html'; ?>

<main class="home">
    <div class="form-container">
        <h2>Спасибо за ваше сообщение!</h2>
        <div class="thank-you-message">
            <p><strong>ФИО:</strong> <?php echo htmlspecialchars($fullname); ?></p>
            <p><strong>Почта:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Тема обращения:</strong> <?php echo htmlspecialchars($type); ?></p>
            <p><strong>Сообщение:</strong> <?php echo nl2br(htmlspecialchars($message)); ?></p>
            <p><strong>Источник информации:</strong> <?php echo htmlspecialchars($source); ?></p>
            <p><strong>Прикрепленный файл:</strong> <?php echo htmlspecialchars($file); ?></p>
        </div>
        <!-- Возврат к форме (рабочая версия) -->
        <form action="index.php" method="GET">
            <input type="hidden" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
            <input type="hidden" name="type" value="<?php echo htmlspecialchars($type); ?>">
            <input type="hidden" name="source" value="<?php echo htmlspecialchars($source); ?>">
            <input type="hidden" name="agreement"
                value="<?php echo isset($_POST['agreement']) || isset($_GET['agreement']) ? 'on' : ''; ?>">
            <button type="submit">Заполнить повторно</button>
        </form>
    </div>
</main>

</body>
</html>
