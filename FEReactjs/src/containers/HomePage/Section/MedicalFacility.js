import React, { Component } from "react";
import { Redirect } from "react-router-dom";
import { connect } from "react-redux";
import Slider from "react-slick";
class MedicalFacility extends Component {
  render() {
    return (
      <div className="section-share section-facility">
        <div className="section-container">
          <div className="section-header">
            <span className="title-section">Cơ sở y tế nổi bật</span>
            <button className="btn-section">Tìm Kiếm</button>
          </div>
          <div className="section-body">
            <Slider {...this.props.settings}>
              <div className="section-customize">
                <div className="bg-img section-facility"></div>
                <h3>Hệ thống Y tế Thu Cúc TCI</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-facility"></div>
                <h3>Hệ thống Y tế Thu Cúc TCI</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-facility"></div>
                <h3>Hệ thống Y tế Thu Cúc TCI</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-facility"></div>
                <h3>Hệ thống Y tế Thu Cúc TCI</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-facility"></div>
                <h3>Hệ thống Y tế Thu Cúc TCI</h3>
              </div>
              <div className="section-customize">
                <div className="bg-img section-facility"></div>
                <h3>Hệ thống Y tế Thu Cúc TCI</h3>
              </div>
            </Slider>
          </div>
        </div>
      </div>
    );
  }
}

const mapStateToProps = (state) => {
  return {
    isLoggedIn: state.user.isLoggedIn,
  };
};

const mapDispatchToProps = (dispatch) => {
  return {};
};

export default connect(mapStateToProps, mapDispatchToProps)(MedicalFacility);
