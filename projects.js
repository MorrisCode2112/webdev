const projects = [
    {
        title: "Icbins",
        desc: "This is I Can't Believe This Isn't Spreadsheet, or Icbins, for short. The culmination of a semester long project, this is a terminal-based pseudo-spreadsheet program. This was probably one of the most challenging projects I have worked on. It was written in C++, which I learned while working on the project. While I had experience in Java, which is based on C++, C++ is still quite different, and shares many similarities with C.",
        source: "/webdev/icbins.png",
        git: "https://github.com/MorrisCode2112/ICBINS"
    },
    {
        title: "Audio Editor",
        desc: "This is an audio editing program I created for CS349, Developing multimedia. It had the ability to save and load audio files with a custom file format. It also has the ability to reverse audio and amplify it. I modeled it after Audacity. This project taught me more about object-oriented programming, as well as programming GUIs in Java. Creating applications that run in a window and have visuals, as opposed to command-line only, is very rewarding.",
        source: "/webdev/audio.png",
        git: "https://github.com/MorrisCode2112/"
    },
    {
        title: "Gamesaver",
        desc: "This is Gamesaver, a website that uses Twitch's api for searching games to create a sort of game backlog to list unplayed games. This was probably the most fun I had working on any project in college. A final project for my web development class, CS343",
        source: "/webdev/gamesaver.png",
        git: "https://github.com/MorrisCode2112/gamesaver"
    }
]

document.addEventListener('DOMContentLoaded', function() {
    putProj(); 
});

function putProj() {
    let proj = document.getElementById("projects");

    projects.forEach(project => {
        let titl = document.createElement("h3");

        let link = document.createElement("a");
        link.setAttribute("href", project.git);
        link.setAttribute("target", "_blank")
        link.textContent = project.title;

        let cont = document.createElement("p");
        cont.textContent = project.desc;

        let img = document.createElement("img");
        img.setAttribute("src", project.source);
        img.setAttribute("alt", project.title);

        let br = document.createElement("br");

        titl.appendChild(link);
        proj.appendChild(titl);
        proj.appendChild(cont);
        proj.appendChild(img);
        proj.appendChild(br);
        proj.appendChild(br);
    });
}

