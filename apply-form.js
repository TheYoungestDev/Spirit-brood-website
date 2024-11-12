// Show relevant options based on the program selected
document.getElementById("programSelect").addEventListener("change", function () {
    // Hide all main options
    document.getElementById("certificationOptions").style.display = "none";
    document.getElementById("bachelorsOptions").style.display = "none";
    document.getElementById("mastersOptions").style.display = "none";

    // Hide all specializations for bachelor's and master's programs
    document.getElementById("bThOptions").style.display = "none";
    document.getElementById("bMinOptions").style.display = "none";
    document.getElementById("bDivOptions").style.display = "none";
    document.getElementById("mThOptions").style.display = "none";
    document.getElementById("mMinOptions").style.display = "none";
    document.getElementById("mDivOptions").style.display = "none";

    const selectedProgram = this.value;

    // Show the relevant program options
    if (selectedProgram === "Certification") {
        document.getElementById("certificationOptions").style.display = "block";
    } else if (selectedProgram === "Bachelors") {
        document.getElementById("bachelorsOptions").style.display = "block";
    } else if (selectedProgram === "Masters") {
        document.getElementById("mastersOptions").style.display = "block";
    }
});

// Handle Bachelor's specialization options
document.getElementById("bachelorSelect").addEventListener("change", function () {
    // Hide all bachelor's specializations
    document.getElementById("bThOptions").style.display = "none";
    document.getElementById("bMinOptions").style.display = "none";
    document.getElementById("bDivOptions").style.display = "none";

    const selectedBachelor = this.value;

    // Show the relevant bachelor's specialization options
    if (selectedBachelor === "BTh") {
        document.getElementById("bThOptions").style.display = "block";
    } else if (selectedBachelor === "BMin") {
        document.getElementById("bMinOptions").style.display = "block";
    } else if (selectedBachelor === "BDiv") {
        document.getElementById("bDivOptions").style.display = "block";
    }
});

// Handle Master's specialization options
document.getElementById("masterSelect").addEventListener("change", function () {
    // Hide all master's specializations
    document.getElementById("mThOptions").style.display = "none";
    document.getElementById("mMinOptions").style.display = "none";
    document.getElementById("mDivOptions").style.display = "none";

    const selectedMaster = this.value;

    // Show the relevant master's specialization options
    if (selectedMaster === "MTh") {
        document.getElementById("mThOptions").style.display = "block";
    } else if (selectedMaster === "MMin") {
        document.getElementById("mMinOptions").style.display = "block";
    } else if (selectedMaster === "MDiv") {
        document.getElementById("mDivOptions").style.display = "block";
    }
});
