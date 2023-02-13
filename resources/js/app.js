import './bootstrap';

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      console.log(entry);
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  });
  
  const hideleftElements = document.querySelectorAll(".hideleft");
  hideleftElements.forEach((el) => observer.observe(el));
  
  const hiderightElements = document.querySelectorAll(".hideright");
  hiderightElements.forEach((el) => observer.observe(el));
  
  const hideElements = document.querySelectorAll(".hide");
  hideElements.forEach((el) => observer.observe(el));