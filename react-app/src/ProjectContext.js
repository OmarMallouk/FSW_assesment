import React, { createContext, useState, useEffect } from "react";


export const projectContext = createContext();

const ProjectContext = ({ children }) => {
    const [users, setUsers] = useState(null);
    const [projects, setProjects] = useState(null);

    const getAllProjects = () => {
        axios
          .get("http://127.0.0.1:8000/api/auth/allPro", {
            
          })
          .then(({ data }) => {
            setProjects(data.projects);
          });
      };



    useEffect(() => {
    
getAllProjects()
  
    }, []);

    return (
        <projectContext.Provider value={{ projects }}>
            {children}
        </projectContext.Provider>
    );
};

export default ProjectContext;
