class TabManager {
  constructor() {
    this.tabButtons = document.querySelectorAll(".services__tabs-tab");
    this.tabContents = document.querySelectorAll(".services__tab-content");
  }

  hideAllTabContents() {
    this.tabContents.forEach((content) => {
      content.style.display = "none";
    });
  }

  showTabContent(tab) {
    this.tabButtons.forEach((el) => el.classList.remove("active-tab"));
    const selectedTabButton = document.querySelector(`.services__tabs-tab[data-tab=${tab}]`);
    if (selectedTabButton) {
      selectedTabButton.classList.add("active-tab");
    }
    const selectedTabContent = document.querySelector(`.services__tab-content[data-tab=${tab}]`);
    if (selectedTabContent) {
      selectedTabContent.style.display = "block";
    }
  }

  addEventListeners() {
    this.tabButtons.forEach((button) => {
      button.addEventListener("click", () => {
        const selectedTab = button.getAttribute("data-tab");
        this.hideAllTabContents();
        this.showTabContent(selectedTab);
      });
    });
  }

  initialize() {
    this.hideAllTabContents();
    this.addEventListeners();
    this.showTabContent("tab1");
  }
}

const tabManager = new TabManager();
tabManager.initialize();

// Mobile Drawer
const currentDrawer = document.querySelector(".services__tabs-wrapper");
const currentDrawerTarget = document.querySelector(".show_on_mobile");
const body = document.body;

function isDescendantOf(element, parent) {
  return parent.contains(element);
}

function showDrawer() {
  if (window.innerWidth <= 1024) {
    currentDrawer.classList.add("show-tab");
    body.classList.add("disable-body");
  }
}

function hideDrawer() {
  currentDrawer.classList.remove("show-tab");
  body.classList.remove("disable-body");
}

if (currentDrawerTarget) {
  currentDrawerTarget.addEventListener("click", () => {
    showDrawer();
  });
}

document.addEventListener("click", (event) => {
  const clickedElement = event.target;
  const isClickedInsideDrawer = isDescendantOf(clickedElement, currentDrawer);
  const isClickedInsideDrawerTarget = isDescendantOf(clickedElement, currentDrawerTarget);

  if (isClickedInsideDrawer || isClickedInsideDrawerTarget) {
    showDrawer();
  } else {
    hideDrawer();
  }
});
