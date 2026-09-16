export async function testerApi() {
  const response = await fetch('/api/materiels')

  if (!response.ok) {
    throw new Error(`API indisponible : HTTP ${response.status}`)
  }

  return response.json()
}
