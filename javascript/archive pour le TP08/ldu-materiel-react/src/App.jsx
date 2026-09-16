import { useEffect, useState } from 'react'
import { testerApi } from './services/api.js'

function App() {
  const [apiEtat, setApiEtat] = useState('Vérification de l’API…')

  useEffect(() => {
    testerApi()
      .then((materiels) => {
        setApiEtat(`API Spring Boot joignable — ${materiels.length} matériel(s) reçu(s)`)
      })
      .catch(() => {
        setApiEtat('API Spring Boot non joignable — démarrez le backend sur le port 8080')
      })
  }, [])

  return (
    <main className="page">
      <h1>LDU Matériel</h1>
      <p className="techno">Projet de départ — React</p>

      <section className="controle">
        <h2>État du projet</h2>
        <p>{apiEtat}</p>
      </section>

      <section className="mission">
        <h2>À vous de construire la suite</h2>
        <p>
          Cette application est volontairement minimale. Les composants métier,
          la liste des matériels et les actions seront ajoutés pendant le TP.
        </p>
      </section>
    </main>
  )
}

export default App
