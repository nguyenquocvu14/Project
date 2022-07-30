import "./Blog.scss";
import { useState } from "react";

const AddNewBlog = () => {
  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");
  const handleSubmitBtn = (event) => {
    event.preventDefault();
    if (!title) {
      alert("empty title");
      return;
    }
    if (!content) {
      alert("empty content");
      return;
    }
    console.log("check", title, content);
  };
  return (
    <form onSubmit={handleSubmitBtn}>
      <div className="add-new-container">
        <div className="text-add-new">---Add new blogs ---</div>
        <div className="inputs-data">
          <label>Title: </label>
          <input type="text" value={title} onChange={(event) => setTitle(event.target.value)} />
        </div>
        <div className="inputs-data">
          <label>Content: </label>
          <input type="text" value={content} onChange={(event) => setContent(event.target.value)} />
        </div>
        {/* <button className="btn-add-new" onClick={handleSubmitBtn}>
          Submit
        </button> */}
        <button className="btn-add-new" type="submit">
          Submit
        </button>
      </div>
    </form>
  );
};
export default AddNewBlog;
