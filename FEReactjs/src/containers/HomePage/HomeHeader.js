import React, { Component } from "react";
import { Redirect } from "react-router-dom";
import { connect } from "react-redux";
import "./HomeHeader.scss";
import { FormattedMessage } from "react-intl";
import logo from "../../assets/logo.svg";
import { LANGUAGES } from "../../utils";
import { changeLanguageApp } from "../../store/actions";

class HomeHeader extends Component {
  changeLanguage = (language) => {
    this.props.changeLanguageAppRedux(language);
  };
  render() {
    let language = this.props.language;
    // console.log("chekkk", language);
    console.log("checkinfo>>>", this.props.userInfo);
    return (
      <>
        <div className="home-header-container">
          <div className="home-header-content">
            <div className="left-content">
              <i className="fas fa-bars"></i>
              <img src={logo} className="header-logo" />
            </div>
            <div className="center-content">
              <div className="child-content">
                <div className="subs-title">
                  <b>
                    <FormattedMessage id="homeheader.speciality" />
                  </b>
                </div>
                <div>
                  <FormattedMessage id="homeheader.searchdoctor" />
                </div>
              </div>
              <div className="child-content">
                <div className="subs-title">
                  <b>
                    <FormattedMessage id="homeheader.Health facilities" />
                  </b>
                </div>
                <div>
                  <FormattedMessage id="homeheader.select room" />
                </div>
              </div>
              <div className="child-content">
                <div className="subs-title">
                  <b>
                    <FormattedMessage id="homeheader.Doctor" />
                  </b>
                </div>
                <div>
                  <FormattedMessage id="homeheader.select doctor" />
                </div>
              </div>
              <div className="child-content">
                <div className="subs-title">
                  <b>
                    <FormattedMessage id="homeheader.fee" />
                  </b>
                </div>
                <div>
                  <FormattedMessage id="homeheader.check health" />
                </div>
              </div>
            </div>
            <div className="right-content">
              <div className="support">
                <i className="fas fa-question-circle">
                  <FormattedMessage id="homeheader.Support" />
                </i>
              </div>
              <div className={language === LANGUAGES.VI ? "language-vi active" : "language-en"}>
                <span onClick={() => this.changeLanguage(LANGUAGES.VI)}>VN</span>
              </div>
              <div className={language === LANGUAGES.EN ? "language-en active" : "language-vi"}>
                <span onClick={() => this.changeLanguage(LANGUAGES.EN)}>EN</span>
              </div>
            </div>
          </div>
        </div>
        <div className="home-header-banner">
          <div className="content-up">
            <div className="title1">
              <FormattedMessage id="Banner.title1" />
            </div>
            <div className="title2">
              <FormattedMessage id="Banner.title2" />
            </div>
            <div className="search">
              <i className="fas fa-search"></i>
              <input type="text" placeholder="Tìm gói Khám" />
            </div>
          </div>
          <div className="content-down">
            <div className="option">
              <div className="option-child">
                <div className="icon-child">
                  <i className="fas fa-hospital-alt"></i>
                </div>
                <div className="text-child">
                  <FormattedMessage id="Banner.child1" />
                </div>
              </div>

              <div className="option-child">
                <div className="icon-child">
                  <i className="fas fa-ambulance"></i>
                </div>
                <div className="text-child">
                  <FormattedMessage id="Banner.child2" />
                </div>
              </div>

              <div className="option-child">
                <div className="icon-child">
                  <i className="fas fa-stethoscope"></i>
                </div>
                <div className="text-child">
                  <FormattedMessage id="Banner.child3" />
                </div>
              </div>

              <div className="option-child">
                <div className="icon-child">
                  <i className="fas fa-procedures"></i>
                </div>
                <div className="text-child">
                  <FormattedMessage id="Banner.child4" />
                </div>
              </div>

              <div className="option-child">
                <div className="icon-child">
                  <i className="fas fa-h-square"></i>
                </div>
                <div className="text-child">
                  <FormattedMessage id="Banner.child5" />
                </div>
              </div>

              <div className="option-child">
                <div className="icon-child">
                  <i className="fas fa-hospital-symbol"></i>
                </div>
                <div className="text-child">
                  <FormattedMessage id="Banner.child6" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </>
    );
  }
}
const mapStateToProps = (state) => {
  return {
    isLoggedIn: state.user.isLoggedIn,
    userInfo: state.user.userInfo,
    language: state.app.language,
  };
};
const mapDispatchToProps = (dispatch) => {
  return {
    changeLanguageAppRedux: (language) => dispatch(changeLanguageApp(language)),
  };
};
export default connect(mapStateToProps, mapDispatchToProps)(HomeHeader);
