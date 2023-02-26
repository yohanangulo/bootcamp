import React from "react";
import "../resources/css/style.css";

export default function Video(props) {
  return (
    <div className="video-container">
      <div className="video">
        <img src={props.srcImg} />
        <div className="time-count">
          <span>{props.timeCount}</span>
        </div>
      </div>
      <div className="details">
        <div>
          <img className="channel-img" src={props.channelImg} alt="" />
        </div>
        <div className="meta">
          <h3>{props.title} hole</h3>
          <div className="data">
            <p>{props.channelName}</p>
            <p>
              {props.views} views
              <span>{props.released} ago</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}
