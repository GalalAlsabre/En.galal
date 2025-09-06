# Stillness Aroma - Coffee Education Website

A comprehensive coffee education platform designed to teach brewing techniques, share recipes, and build a community of coffee enthusiasts.

## 🌟 Features

### Core Pages
- **Home Page** (`index.html`) - Welcome page with hero section and feature highlights
- **Recipes** (`recipes.html`) - Interactive recipe collection with filtering and search
- **Learning Hub** (`learning.html`) - Educational content about coffee origins, brewing science, and techniques
- **EZcoffee Game** (`ezcoffee.html`) - Coming soon interactive coffee brewing simulation
- **Favorites** (`favorites.html`) - User's saved recipes (requires login)

### User Management
- **Login** (`login.html`) - User authentication
- **Sign Up** (`signup.html`) - New user registration
- **Account** (`account.html`) - User profile and settings
- **Admin Dashboard** (`admin.html`) - Administrative interface

### Additional Pages
- **About** (`about.html`) - Company story and team information
- **Contact** (`contact.html`) - Contact form and company information
- **Feedback** (`feedback.html`) - User feedback and testimonials

## 🎨 Design System

### Color Palette
- **Primary Coffee Brown**: `#8B4513`
- **Dark Brown**: `#5D2F0A`
- **Cream**: `#F5F5DC`
- **Beige**: `#F0E68C`
- **White**: `#FFFFFF`
- **Black**: `#000000`
- **Neutral Gray**: `#6C757D`

### Typography
- **Primary Font**: Playfair Display (headings)
- **Secondary Font**: Inter (body text)
- **Font Sizes**: 
  - Hero: 72px
  - Headings: 36px, 24px
  - Body: 20px, 16px

### Layout Principles
- **Responsive Design**: Mobile-first approach with Bootstrap 5
- **Grid System**: 12-column Bootstrap grid
- **Spacing**: Consistent padding and margins using CSS custom properties
- **Border Radius**: 8px for cards and buttons
- **Box Shadow**: Subtle shadows for depth

## 🛠️ Technical Stack

### Frontend Technologies
- **HTML5**: Semantic markup
- **CSS3**: Custom properties, Flexbox, Grid
- **JavaScript (ES6+)**: Modern JavaScript features
- **Bootstrap 5**: Responsive framework
- **FontAwesome 6**: Icon library
- **AOS (Animate On Scroll)**: Scroll animations
- **Google Fonts**: Typography

### Key Features
- **Responsive Design**: Works on all device sizes
- **Progressive Enhancement**: Core functionality works without JavaScript
- **Local Storage**: Saves user preferences and favorites
- **Search & Filter**: Dynamic content filtering
- **Modal System**: Recipe details in overlays
- **Form Validation**: Client-side form validation
- **Accessibility**: ARIA labels and semantic HTML

## 📁 Project Structure

```
stillness-aroma-website/
├── css/
│   └── styles.css          # Main stylesheet
├── js/
│   └── scripts.js          # Main JavaScript file
├── img/                    # Image assets (placeholder)
├── index.html              # Home page
├── recipes.html            # Recipe collection
├── learning.html           # Learning hub
├── ezcoffee.html          # Game page (coming soon)
├── favorites.html          # User favorites
├── login.html             # Login page
├── signup.html            # Registration page
├── account.html           # User account
├── admin.html             # Admin dashboard
├── about.html             # About page
├── contact.html           # Contact page
├── feedback.html          # Feedback page
├── todo.md                # Development tasks
└── README.md              # This file
```

## 🚀 Getting Started

### Prerequisites
- Modern web browser (Chrome, Firefox, Safari, Edge)
- Local web server (optional, for development)

### Installation
1. Clone or download the project files
2. Open `index.html` in your web browser
3. For development, use a local server:
   ```bash
   # Using Python
   python -m http.server 8000
   
   # Using Node.js
   npx serve .
   
   # Using PHP
   php -S localhost:8000
   ```

### Development Setup
1. Open the project in your preferred code editor
2. Make changes to HTML, CSS, or JavaScript files
3. Refresh the browser to see changes
4. Use browser developer tools for debugging

## 📱 Responsive Breakpoints

- **Mobile**: < 576px
- **Tablet**: 576px - 768px
- **Desktop**: 768px - 992px
- **Large Desktop**: > 992px

## 🎯 User Experience Features

### Navigation
- Fixed navigation bar with scroll effects
- Mobile-responsive hamburger menu
- Active page highlighting
- Smooth scrolling to sections

### Interactive Elements
- Recipe cards with hover effects
- Favorite button functionality
- Search and filter system
- Modal dialogs for detailed content
- Form validation with feedback
- Loading animations

### Accessibility
- Semantic HTML structure
- ARIA labels for screen readers
- Keyboard navigation support
- High contrast color scheme
- Responsive text sizing

## 🔧 Customization

### Colors
Update CSS custom properties in `styles.css`:
```css
:root {
    --coffee-brown: #8B4513;
    --dark-brown: #5D2F0A;
    --cream: #F5F5DC;
    /* Add your custom colors */
}
```

### Content
- Update recipe data in `scripts.js`
- Modify learning content in the `learningContent` array
- Replace placeholder images with actual photos
- Update company information in about and contact pages

### Styling
- Modify component styles in `styles.css`
- Adjust Bootstrap variables if needed
- Add custom animations or transitions

## 📊 Features Overview

### Recipe System
- Dynamic recipe display
- Search functionality
- Filter by difficulty and method
- Favorite recipes (with login)
- Detailed recipe modals
- Responsive recipe cards

### Learning Platform
- Accordion-style content organization
- Progressive disclosure of information
- Video placeholder integration
- Topic-based learning modules

### User Management
- Local storage-based authentication
- User profile management
- Favorites persistence
- Admin dashboard (basic)

## 🔮 Future Enhancements

### Planned Features
- **EZcoffee Game**: Interactive brewing simulation
- **Video Integration**: Embedded tutorial videos
- **User Reviews**: Recipe rating and comments
- **Social Features**: Share recipes and achievements
- **Mobile App**: Progressive Web App (PWA) features
- **Backend Integration**: Real user authentication and data persistence

### Technical Improvements
- **Performance**: Image optimization and lazy loading
- **SEO**: Meta tags and structured data
- **Analytics**: User behavior tracking
- **Testing**: Automated testing suite
- **CI/CD**: Deployment automation

## 🤝 Contributing

1. Fork the project
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is created for educational purposes. All rights reserved to Stillness Aroma.

## 📞 Support

For questions or support, please contact:
- Email: hello@stillnessaroma.com
- Website: [Contact Page](contact.html)

---

**Built with ❤️ and ☕ by the Stillness Aroma Team**

