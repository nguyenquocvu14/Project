import { useEffect, useState } from "react";
import axios from "axios";
import moment from "moment";
const useFetch = (url, isData) => {
  let [data, setData] = useState([]);
  //thi vu loading
  //neu data rong
  let [loading, setLoading] = useState(true);
  //khong co loi
  let [iserror, setError] = useState(false);
  // xu li useEffect
  useEffect(() => {
    //fix loi update memory
    const ourRequest = axios.CancelToken.source();
    async function fetchData() {
      try {
        //fix loi update memory
        let res = await axios.get(url, {
          cancelToken: ourRequest.token,
        });
        let data = res && res.data ? res.data : [];
        //format Date
        if (data && data.length > 0 && isData == true) {
          data.map((item) => {
            item.Date = moment(item.Data).format("DD/MM/YYYY");
            return item;
          });
        }
        setData(data);
        setLoading(false);
        setError(false);
      } catch (err) {
        if (axios.isCancel(err)) {
          console.log("Request canceled", err.message);
        } else {
          setError(true);
          setLoading(false);
        }
      }
    }
    setTimeout(() => {
      fetchData();
    }, 900);

    return () => {
      ourRequest.cancel("Operation canceled by the user."); // <-- 3rd step
    };
  }, [url]);

  return {
    data,
    loading,
    iserror,
  };
};
export default useFetch;
