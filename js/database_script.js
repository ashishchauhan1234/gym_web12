// var db = openDatabase("checkDB",
//     "1.0",
//     "checkDataBase",
//     2*1024*1024
// );

// console.log("js page connected");
// function create_db_table() {
//     // Create table in database
//     alert("create table function call..");
//     db.transaction(function (transaction) {
//         // var sql ='DROP TABLE MEMBERSHIP_DETAILS';
//         let sql = "CREATE TABLE MEMBERSHIP_DETAILS (" +
//             "ID INTEGER PRIMARY KEY AUTOINCREMENT," +
//             "NAME VARCHAR(50) NOT NULL," +
//             "EMAIL VARCHAR(50) NOT NULL," +
//             "AGE INTEGER NOT NULL," +
//             "PHONE INTEGER NOT NULL," +
//             "CITY VARCHAR(50) NOT NULL," +
//             "MESSAGE VARCHAR(50) NOT NULL"+
//             ")";
//         // console.log("sql :: "+ sql);
//         transaction.executeSql(sql, undefined,
//             function (transaction, resultSet) {
//             alert("table has successfully created and it gives result " + resultSet.rows.length);
//             }, function (transaction, error) {
//             alert("table has not successfully created and it gives error " + error.message);
//         });
//     });
// }

// function insert_table() {
//     const name = $("#name").val();
//     const email = $("#email").val();
//     const age = $("#age").val();
//     const phone = $("#phone_no").val();
//     const city = $("#city").val();
//     const message = $("#msg").val();
//     console.log(name, email, age,phone, message, city);
//     db.transaction(function (transaction) {
//         let sql = 'INSERT INTO MEMBERSHIP_DETAILS(name, email, age, phone, city, message) ' +
//             'VALUES (?,?,?,?,?,?)';
//         transaction.executeSql(sql, [name, email, age, phone, city, message],
//             function (transaction, resultSet) {
//             console.log("New Data has successfully saved and it gives result " + resultSet);
//             }, function (transaction, error) {
//             alert("New Data has not successfully saved and it gives error " + error.message);
//             });
//     });
// }
// $(function (){
//     //database connection
//     $("#create_table").click(function (){
//         create_db_table();
//     });

//     $("#submit-msg").click(function (){
//         insert_table();
//     });
// });
// // create_db_table();
