import express from "express";
import configViewEngine from "./configs/viewEngine.js";
import "dotenv/config";

const app = express();
const port = process.env.PORT || 3000;

configViewEngine(app);

app.get("/", (req, res) => {
  res.render("index.ejs");
});

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`);
});