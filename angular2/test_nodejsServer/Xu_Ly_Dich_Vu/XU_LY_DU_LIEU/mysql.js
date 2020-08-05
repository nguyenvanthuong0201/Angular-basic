var mysql = require('mysql');

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'angular_php1'
});
 
connection.connect();
class xu_ly_nhan_vien {

    async get_list_nhan_vien() {
        
        console.log("vao")
        try {
            var re = await connection.query('select * from account', function (error, results, fields) {
                if (error) throw error;
                console.log('The solution is: ', results);
              });
console.log(re)



            //connection = await mysql.createConnection(dbConfig);
      var result = await connection.query('select * from account');

      console.log(result[0]);
      return result[0];
        } catch (Loi) {
            console.log(Loi)
        }
    }

    async them_tai_khoan_nhan_vien(Loai_doi_tuong, Doi_tuong, id){
        try{
            var them = await admin.firestore().collection(Loai_doi_tuong).doc(id).set(Doi_tuong);
            return them;
        }catch(Loi){
            console.log(Loi)
        }
    }

    async sua_tai_khoan_nhan_vien(Loai_doi_tuong, Gia_tri_cap_nhat, id)
    {
        try {
            var sua = await admin.firestore().collection(Loai_doi_tuong).doc(id).set(Gia_tri_cap_nhat);
            return sua
        } catch (Loi) {
            console.log(Loi)
        }
    }

}

var xuly = new xu_ly_nhan_vien;
module.exports = xuly;