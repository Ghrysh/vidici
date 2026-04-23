/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        vidici: {
          bg: '#080b13',
          card: '#121620',
          border: '#1f2937',
          primary: '#a855f7',
          secondary: '#ec4899',
          accent: '#3b82f6',
        }
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'hero-glow': 'radial-gradient(circle at 50% 0%, rgba(168, 85, 247, 0.15), rgba(8, 11, 19, 0) 50%)',
      }
    },
  },
  plugins: [],
}