# Database
Чтобы проверить корректность добавления результата выполнения задачи в базу данных необходимо:
1) выполнить SQL скрипт
```
CREATE DATABASE PHPpractice;
GO

USE PHPpractice;
GO

CREATE TABLE Car (
    IDCar INT IDENTITY(1,1) PRIMARY KEY,
    VehicleType CHAR(1)
);
GO
CREATE TABLE Result (
    IDResult INT IDENTITY(1,1) PRIMARY KEY,
    SuccessfulParking CHAR(1),
    IDCar INT,
    FOREIGN KEY (IDCar) REFERENCES Car(IDCar)
);
GO
```
2) в файле **index.php** изменить название сервера в строке 13 - "$dsn = 'sqlsrv:Server=your_server_name;Database=PHPpractice';"
3) в случае если у Вас есть логин и пароль указать их в строках 14 и 15 
