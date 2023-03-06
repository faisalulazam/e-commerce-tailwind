import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

const Blogindex = () => {
    const [post, setUsers] = useState()
  
    const fetchData = () => {
      fetch("/api/posts")
        .then(response => {
          return response.json()
        })
        .then(data => {
            setUsers(data)
          })
    }
    
      useEffect(() => {
        fetchData()
      }, [])
      

    return <div>
    {post?.length > 0 && (
      <div>
        {post.map(user => (<>
          <p>{user.title}</p>,
          <p>{user.description}</p>
          </>
        ))}
      </div>
    )}
  </div>

}
export default Blogindex;


