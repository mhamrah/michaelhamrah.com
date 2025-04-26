# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Build Commands
- `npm run dev` - Start development server
- `npm run build` - Build for production
- `npm run preview` - Preview production build

## Testing Commands
- `npm run test` - Run all tests
- `npm run test:integration` - Run Playwright integration tests
- `npx playwright test tests/test.ts` - Run specific test file
- `npx playwright test -g "test name"` - Run test by name

## Lint/Format Commands
- `npm run lint` - Run linting checks
- `npm run format` - Format code with Prettier
- `npm run check` - Type checking

## Code Style Guidelines
- **TypeScript**: Use strict typing
- **Formatting**: Tabs for indentation, single quotes, 100 char line length
- **Components**: Svelte files with scripts at top, styles at bottom
- **CSS**: Use Tailwind for styling
- **Imports**: ESM syntax, relative paths for project files
- **Project Structure**: SvelteKit conventions with routes in src/routes
- **Testing**: Playwright for integration, tests in tests directory