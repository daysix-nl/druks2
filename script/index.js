const acc = document.getElementsByClassName("accordion");

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    const panel = this.nextElementSibling;
    this.classList.toggle("active");
    panel.style.height =
      panel.style.height === panel.scrollHeight + "px"
        ? "0"
        : panel.scrollHeight + "px";

    for (let j = 0; j < acc.length; j++) {
      if (this !== acc[j]) {
        acc[j].classList.remove("active");
        acc[j].nextElementSibling.style.height = "0";
      }
    }
  });
}

try {
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".custom-quantity-input").forEach((input) => {
      let timeout;

      input.addEventListener("input", () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
          updateCartQuantity(input.dataset.cartItemKey, input.value);
        }, 1000);
      });
    });
  });

  const updateCartQuantity = async (cartItemKey, quantity) => {
    try {
      const response = await fetch("/wp-admin/admin-ajax.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "action=update_cart_quantity&cart_item_key=" +
          cartItemKey +
          "&quantity=" +
          quantity,
      });

      const data = await response.json();

      if (data.success) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const card = urlParams.get("cart_updated");
        if (!window.location.href.includes("afrekenen") && !card) {
          window.location = window.location.href + "?cart_updated=true";
        } else {
          window.location.reload();
        }
      } else {
        console.error("Failed to update cart");
      }
    } catch (error) {
      console.error("Error:", error);
    }
  };
} catch (error) {}

try {
  window.addEventListener("load", () => {
    const overlayShopCart = document.querySelector(".sidecart-overlay");
    const sidecart = document.querySelector("#sidecart-menu");
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const card = urlParams.get("cart_updated");
    if (sidecart && card) {
      sidecart.classList.remove("sidecart-hidden");
      overlayShopCart.classList.add("sidecart-overlay-active");
    }
  });
} catch (error) {}

try {
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".custom-quantity-input").forEach((input) => {
      let timeout;

      input.addEventListener("input", () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
          updateCartQuantity(input.dataset.cartItemKey, input.value);
        }, 1000);
      });
    });
  });

  const updateCartQuantity = async (cartItemKey, quantity) => {
    try {
      const response = await fetch("/wp-admin/admin-ajax.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "action=update_cart_quantity&cart_item_key=" +
          cartItemKey +
          "&quantity=" +
          quantity,
      });

      const data = await response.json();

      if (data.success) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const card = urlParams.get("cart_updated");
        if (!window.location.href.includes("afrekenen") && !card) {
          window.location = window.location.href + "?cart_updated=true";
        } else {
          window.location.reload();
        }
      } else {
        console.error("Failed to update cart");
      }
    } catch (error) {
      console.error("Error:", error);
    }
  };
} catch (error) {}

try {
  window.addEventListener("load", () => {
    const overlayShopCart = document.querySelector(".sidecart-overlay");
    const sidecart = document.querySelector("#sidecart-menu");
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const card = urlParams.get("cart_updated");
    if (sidecart && card) {
      sidecart.classList.remove("sidecart-hidden");
      overlayShopCart.classList.add("sidecart-overlay-active");
    }
  });
} catch (error) {}

try {
  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".custom-quantity-input").forEach((input) => {
      let timeout;

      input.addEventListener("input", () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
          updateCartQuantity(input.dataset.cartItemKey, input.value);
        }, 1000);
      });
    });
  });

  const updateCartQuantity = async (cartItemKey, quantity) => {
    try {
      const response = await fetch("/wp-admin/admin-ajax.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "action=update_cart_quantity&cart_item_key=" +
          cartItemKey +
          "&quantity=" +
          quantity,
      });

      const data = await response.json();

      if (data.success) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const card = urlParams.get("cart_updated");
        if (!window.location.href.includes("afrekenen") && !card) {
          window.location = window.location.href + "?cart_updated=true";
        } else {
          window.location.reload();
        }
      } else {
        console.error("Failed to update cart");
      }
    } catch (error) {
      console.error("Error:", error);
    }
  };
} catch (error) {}
