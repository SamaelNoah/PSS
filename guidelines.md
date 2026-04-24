# DarkRealm Development Guidelines

## 1. Tech Stack Standards
- **Framework:** Laravel 11+
- **Frontend:** Livewire 3 with `wire:navigate` for SPA-like transitions.
- **UI Library:** Flux UI (use `<flux:...>` components for layout, navigation, and inputs).
- **CSS:** Tailwind CSS (utilize `oklch` colors and `dark:` variants for all components).

## 2. Layout & Views
- **Master Layout:** All authenticated views must be wrapped in the `<x-layouts::app>` component.
- **Slots:** Page content should be placed within the default slot of the layout component.
- **Title Management:** Pass the page title via the `:title` attribute on the layout component: `<x-layouts::app :title="__('Pagle Name')">`.

## 3. Navigation Patterns
- **SPA Experience:** Always add `wire:navigate` to internal application links to maintain the SPA feel.
- **Sidebar:** New navigation items should be added to `resources/views/layouts/app/sidebar.blade.php` within the `<flux:sidebar.nav>` section.
- **Active States:** Use `request()->routeIs('route.name')` to determine the `:current` state of navigation items.

## 4. Component Guidelines
- **Reuse:** Extract repetitive SVG patterns or UI fragments into `resources/views/components/`.
- **Flux Integration:** Favor Flux UI components over raw HTML for complex elements (Modals, Dropdowns, Sidebars).
- **Icons:** Use the `icon` attribute on Flux components (e.g., `icon="home"`, `icon="cog"`) for consistent iconography.

## 5. Styling & Theming
- **Dark Mode:** The application defaults to dark mode. Ensure all custom styles support the `dark:` prefix.
- **Spacing:** Follow the standard Tailwind spacing scale (e.g., `gap-4`, `p-6`).
- **Borders:** Use `border-zinc-200` (light) and `dark:border-zinc-700` (dark) for consistent dividers.

## 6. Notifications & Feedback
- **Toasts:** Use the persistent toast group. Do not move or duplicate the `@persist('toast')` block in the sidebar layout.

## 7. Authentication
- **User Context:** Use `auth()->user()` for profile data. 
- **Initials:** The User model is expected to have an `initials()` method for avatar display.
- **Logout:** Maintain the CSRF-protected POST form for logout actions, styled via `<flux:menu.item as="button">`.

## 8. Directory Structure Reference
- `resources/views/`: Main page templates.
- `resources/views/layouts/app/`: Application shells (Sidebar/Header).
- `resources/views/components/`: Reusable UI fragments.
- `resources/views/partials/`: Head and metadata includes.