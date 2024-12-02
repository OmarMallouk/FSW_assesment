import React, { useState, useEffect } from "react";
import axios from "axios";
import Project from "../components/Project";

const Projects = () => {
  const [projects,setProjects] = useState([]);


  useEffect(() => {
    axios
      .get("http://127.0.0.1:8000/api/auth/allPro") 
      .then((response) => {
        setProjects(response.data.projects); 
      })
      .catch((error) => {
        console.error("Error fetching projects:", error);
      });
  }, []);

  return (
    <div className="projects-container">
      {projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
