import { useState, useEffect } from "react";
import useFetch from "../customize/fetch";
const Covid = () => {
  const { data: covid, loading, iserror } = useFetch("https://api.covid19api.com/country/vietnam?from=2021-9-01T00%3A00%3A00Z&to=2021-9-20T00%3A00%3A00Z");
  return (
    <table id="customers">
      <thead>
        <tr>
          <th>Date</th>
          <th>Confirmed</th>
          <th>Active</th>
          <th>Deaths</th>
          <th>Recovered</th>
        </tr>
      </thead>
      <tbody>
        {iserror === false &&
          loading === false &&
          covid &&
          covid.length > 0 &&
          covid.map((item) => {
            return (
              <tr key={item.ID}>
                <td>{item.Date}</td>
                <td>{item.Confirmed}</td>
                <td>{item.Active}</td>
                <td>{item.Deaths}</td>
                <td>{item.Recovered}</td>
              </tr>
            );
          })}

        {loading === true && (
          <tr>
            <td colSpan="5" style={{ textAlign: "center" }}>
              Loading...
            </td>
          </tr>
        )}

        {iserror === true && (
          <tr>
            <td colSpan="5" style={{ textAlign: "center" }}>
              Something...
            </td>
          </tr>
        )}
      </tbody>
    </table>
  );
};
export default Covid;
