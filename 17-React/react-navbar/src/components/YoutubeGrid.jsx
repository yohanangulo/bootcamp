import data from "../data";
import Video from "./Video";

export default function YoutubeGrid() {


  const grid = data.map((el, i) => {
    return (
      <Video
        key={i}
        srcImg={el.srcImg}
        timeCount={el.timeCount}
        channelImg={el.channelImg}
        title={el.title}
        channelName={el.channelName}
        views={el.views}
        released={el.released}
      />
    );
  });

  return <div className="pt-12 videos-row">{grid}</div>;
}