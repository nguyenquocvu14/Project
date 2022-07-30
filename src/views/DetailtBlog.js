import { useParams, useHistory } from "react-router-dom";
import useFetch from "../customize/fetch";
import "../views/Blog.scss";

const DetialBlog = () => {
  let { id } = useParams();
  let history = useHistory();
  const { data: dataBlogDetail, loading, iserror } = useFetch(`https://jsonplaceholder.typicode.com/posts/${id}`, false);

  const handleBlack = () => {
    history.push("/blog");
  };

  console.log(dataBlogDetail);
  let ObjectEmpty = Object.keys(dataBlogDetail).length === 0;
  return (
    <>
      <button onClick={handleBlack}>Black</button>

      {dataBlogDetail && ObjectEmpty === false && (
        <div className="single-blog">
          <div className="title">
            Blog ID: {id} --- {loading === true ? "Loading data ..." : dataBlogDetail.title}
          </div>
          <div className="content">{dataBlogDetail.body}</div>
        </div>
      )}
    </>
  );
};
export default DetialBlog;
