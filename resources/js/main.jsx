/* existing imports */
import Contact from "./pages/Contact";
import {createBrowserRouter, RouterProvider} from 'react-router-dom';
import ReactDOM from 'react-dom/client';
import React from "react";
import Blogs from "./pages/blogs/blogs";
import Blogindex from "./components/Blogindex";

const router = createBrowserRouter([
  {
    path: "/blog",
    element: <Blogindex />,
  },
  {
    path: "/blog/contact",
    element: <Contact />,
  },
  {
    path: "/blog/blogs",
    element: <Blogs />,
  },
  
]);

// ReactDOM.createRoot(document.getElementById("root")).render(
//   <React.StrictMode>
//     <RouterProvider router={router} />
//   </React.StrictMode>
// );

if (document.getElementById('root')) {
//     const Index = ReactDOM.createRoot(document.getElementById("example"));

//     Index.render(
//         <React.StrictMode>
//             <Example/>
//         </React.StrictMode>
//     )
// }

ReactDOM.createRoot(document.getElementById("root")).render(
    <React.StrictMode>
      <RouterProvider router={router}/>
    </React.StrictMode>
  );
}