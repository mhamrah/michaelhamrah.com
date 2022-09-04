
<style>
    .background-animate {
    background-size: 400%;

    -webkit-animation: AnimationName 3s ease infinite;
    -moz-animation: AnimationName 3s ease infinite;
    animation: AnimationName 3s ease infinite;
  }

  @keyframes AnimationName {
    0%,
    100% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
  }
</style>

<main class="grid place-items-center h-screen content-center">
<h1 class="text-8xl background-animate font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">
    Michael Hamrah
</h1>
</main>