/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'bg': 'hsl(var(--clr-white))',
        'light-bg': 'hsl(var(--clr-gold-200))',
        'bg-button': 'hsl(var(--clr-white))',
        'bg-button-hover': 'hsl(var(--clr-gold-600))',
        'bg-card': 'hsl(var(--clr-white))',
        'bg-black': 'hsl(var(--clr-black))',
        'button-border': 'hsl(var(--clr-gold-600))',
        'text-button': 'hsl(var(--clr-black))',
        'text-button-hover': 'hsl(var(--clr-white))',
        'text': 'hsl(var(---clr-black))',
        'text-hover': 'hsl(var(--clr-gold-600))',
        'txt-title': 'hsl(var(--clr-gold-600))',
        'nav-hover': 'hsl(var(--clr-gold-600))',
        'placeholder': 'hsl(var(--clr-gold-600))',
        'border-b': 'hsl(var(--clr-black))',
        'bg-round' : 'hsl(var(--clr-white))',
        'text-white' : 'hsl(var(--clr-white))',
        'border': 'hsl(var(--clr-gold-600))',
        'border-black': 'hsl(var(--clr-black))',
      },
    },
  plugins: [],
  }
}
