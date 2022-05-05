const mysql = require("mysql2");
// Виконав Усачик Денис КБ-19-1
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "usersdb",
  password: "пароль від серверу"
});
 connection.connect(function(err){
    if (err) {
      return console.error("Помилка: " + err.message);
    }
    else{
      console.log("Піключення до сервера MySQL успішне");
    }
 });