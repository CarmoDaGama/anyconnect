// Newsletter Form Handler
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("newsletterForm")
  const emailInput = document.getElementById("emailInput")
  const subscribeBtn = document.getElementById("subscribeBtn")
  const formFeedback = document.getElementById("formFeedback")

  // Form submission handler
  form.addEventListener("submit", (e) => {
    e.preventDefault()

    const email = emailInput.value.trim()

    if (!isValidEmail(email)) {
      showFeedback("Por favor, insira um e-mail válido.", "error")
      return
    }

    // Show loading state
    subscribeBtn.classList.add("loading")
    subscribeBtn.disabled = true

    // Simulate API call
    setTimeout(() => {
      // Reset loading state
      subscribeBtn.classList.remove("loading")
      subscribeBtn.disabled = false

      // Show success message
      showFeedback("Obrigado! Subscreveu com sucesso à nossa newsletter.", "success")

      // Reset form
      emailInput.value = ""

      // Hide feedback after 5 seconds
      setTimeout(() => {
        hideFeedback()
      }, 5000)
    }, 2000)
  })

  // Email validation
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    return emailRegex.test(email)
  }

  // Show feedback message
  function showFeedback(message, type) {
    formFeedback.textContent = message
    formFeedback.className = `form-feedback ${type} show`
  }

  // Hide feedback message
  function hideFeedback() {
    formFeedback.classList.remove("show")
    setTimeout(() => {
      formFeedback.className = "form-feedback"
    }, 300)
  }

  // Input focus effects
  emailInput.addEventListener("focus", function () {
    this.parentElement.classList.add("focused")
  })

  emailInput.addEventListener("blur", function () {
    this.parentElement.classList.remove("focused")
  })

  // Real-time email validation
  emailInput.addEventListener("input", function () {
    const email = this.value.trim()
    if (email && !isValidEmail(email)) {
      this.style.borderColor = "#dc3545"
    } else {
      this.style.borderColor = ""
    }
  })
})

// Declare AOS variable before using it
const AOS = window.AOS

// Initialize AOS (Animate On Scroll) if available
if (typeof AOS !== "undefined") {
  AOS.init({
    duration: 800,
    easing: "ease-out",
    once: true,
    offset: 100,
  })
}
