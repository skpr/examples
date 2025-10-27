export function getClientSideURL(): string {
  if (typeof window !== 'undefined') return window.location.origin; // e.g. https://example.com
  // If someone accidentally calls this on the server, return empty to avoid SSR/CSR mismatch
  return '';
}
