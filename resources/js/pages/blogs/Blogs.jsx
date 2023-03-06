import React, { useEffect, useState } from 'react';
import ReactDOM from "react-dom/client";

function Blogs (){
    const [state, setState] = useState({
        title: "",
        description: ""
      });
    const handleSubmit = (event) => {
        event.preventDefault();
        console.log(state);
        //call the api
        const requestOptions = {
          method: 'POST',
          headers: { 'Content-Type': 'application/json'},
          body: JSON.stringify({ title: state.title, description: state.description })
      };
      fetch('/api/posts', requestOptions)
          .then(response => response.json())
          .then (data =>{
            console.log('data',data)
            Navigate('/blog')
          });
        
  }
      const handleInputChange = (event) => {
        const { name, value } = event.target;
        setState((prevProps) => ({
          ...prevProps,
          [name]:value
        }));
       };
  //call the api
//   const requestOptions = {
//     method: 'POST',
//     headers: { 'Content-Type': 'application/json' },
//     body: JSON.stringify({ title: 'React POST Request Example' })
// };
// fetch('/api/posts', requestOptions)
//     .then(response => response.json())
//     .then(data => this.setState({ postId: data.id }));
// }


const [posts, setPosts] = useState();
useEffect(()=>{

}, []);

const getPosts =() =>{
fetch('/api/posts')
        .then(response => response.json())
        .then(data => {
        comsole.lost('posts res',data)
          sctoPosts(data)
        });
          
}      
  return (
    
    <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" onSubmit={handleSubmit}>
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Title
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Title" name="title"  onChange={handleInputChange}/>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" >
          Description
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" name="description" onChange={handleInputChange} />
        <p class="text-red-500 text-xs italic">....</p>
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Sign In
        </button>
        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
         save ?
        </a>
      </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
      &copy;
      {/* {posts && posts.nap(post=>{
        return(  
        )
      })} */}
    </p>
  </div>

  );
}

export default Blogs



