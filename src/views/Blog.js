import useFetch from "../customize/fetch";
import "../views/Blog.scss";
import { Link, useHistory } from "react-router-dom";

const Blog = () => {
  let history = useHistory();
  const { data: dataBlog, loading, iserror } = useFetch("https://jsonplaceholder.typicode.com/posts", false);
  let newData = dataBlog.slice(0, 10);

  const AddNewBlog = () => {
    history.push("/add-new-blogs");
  };
  return (
    <>
      <button onClick={AddNewBlog}>Add New Blog</button>
      {/* <Link to="/add-new-blogs">AddNewBlog</Link> */}
      <div className="blogs-container">
        {newData &&
          newData.length > 0 &&
          newData.map((item) => {
            return (
              <div className="single-blog" key={item.id}>
                <div className="title">{item.title}</div>
                <div className="content">{item.body}</div>
                <button>
                  <Link to={`blogs/${item.id}`}> View detail</Link>
                </button>
              </div>
            );
          })}
        {loading === true && <div style={{ textAlign: "center !important", width: "100%" }}>Loading data...</div>}
      </div>
    </>
  );
};
export default Blog;
