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
            <button type="submit" class="button-return">Заполнить снова</button>
        </form>
    </div>
</main>

</body>
</html>
