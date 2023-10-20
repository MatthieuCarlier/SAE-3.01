/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'bg': 'hsl(var(--clr-white))',
        'bg-button': 'hsl(var(--clr-gold-600))',
        'bg-button-hover': 'hsl(var(--clr-white))',
        'border-button': 'hsl(var(--clr-gold-600))',
        'light-bg': 'hsl(var(--clr-gold-100))',
        'like': 'hsl(var(--clr-black))',
        'txt': 'hsl(var(--clr-black))',
        'txt-button': 'hsl(var(---clr-white))',
        'txt-button-hover': 'hsl(var(--clr-white))',
        'txt-title': 'hsl(var(--clr-gold-600))',
        'placeholder': 'hsl(var(--clr-gold-600))',
        'nav-hover': 'hsl(var(--clr-gold-600))',
        'light-bg-gold': 'hsl(var(--clr-gold-200))',
      },
    },
  plugins: [],
  }
}