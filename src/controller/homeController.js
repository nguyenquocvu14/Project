import pool from "../configs/connectDB";

let getHomepage = async (req, res) => {
  //logic
  const [rows, fields] = await pool.execute("SELECT * FROM users");
  // console.log(rows[0]);
  return res.render("index.ejs", { dataUser: rows });
};

let getDetailpage = async (req, res) => {
  let userId = req.params.id;
  let [user] = await pool.execute("SELECT * FROM users Where id=?", [userId]);
  // console.log("checj id", userId);
  return res.send(JSON.stringify(user));
};
module.exports = {
  getHomepage,
  getDetailpage,
};
