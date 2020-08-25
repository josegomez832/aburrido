import React, {useEffect, useState} from 'react'
import axios from 'axios'
import './App.css'
import Activity from './Activity'
import Participants from './Participants'
import ReactPlayer from 'react-player'

function App() {
  const [count, setCount] = useState(0);
  const [data, setData] = useState({
    data:[]
  });
  const [video, setVideo] = useState({
    items:[]
  });
  const [error, setError] = useState('');

  useEffect(() =>{
    axios.get('http://www.boredapi.com/api/activity/')
      .then(response =>{
        setData(response.data);
        return axios.get(`https://www.googleapis.com/youtube/v3/search?key=${process.env.REACT_APP_YOUTUBE_API_KEY}&part=snippet&maxResults=4&q=${response.data.activity}`)
      })
     .then(res =>{
        setVideo(res.data);
        //console.log(video);
     })
      .catch(err =>{
       setError(err.message);
      })
  },[count])
  //useEffect will re-run with count changes :)
  //to run once only, leave an emtpy []
  //test
  if(count === 0){
    return(
      <div className="container">
      <div className="header clearfix">
        
        <h3 className="text-muted">aburrido</h3>
      </div>
      <div className="jumbotron">
        <h1>Hi there, welcome to aburrido. Click the button below to generate an activity for you to start doing!</h1>
        <p><a className="btn btn-lg btn-success" href="#" role="button" onClick={() => setCount(count + 1)}>Are you bored?</a></p>

      </div>
      </div>
    )
  }else{
    
    return (
      <div className="container">
      <div className="header clearfix">
        
        <h3 className="text-muted">aburrido</h3>
      </div>

      <div className="jumbotron">
        <Activity activity={data.activity} type={data.type} />
        <Participants number={data.participants} />
        <p><a className="btn btn-lg btn-success" href="#" role="button" onClick={() => setCount(count + 1)}>Still bored?</a></p>
      </div>
      <div className="row marketing">
       
        {video.items.map(yt=>
            <div class="col-md-6" key={yt.etag}>
               <div className='player-wrapper'>
                  <ReactPlayer
                  url={'https://www.youtube.com/watch?v='+yt.id.videoId}
                  light={true}
                  playing={false}
                  className='react-player'
                    width='100%'
                    height='100%'
                  />
                  </div>
              </div>
        )}
        </div>
       
      </div>
      );
  }  
}

export default App;