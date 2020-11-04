<template>
  <div>
    <!-- <h1>Click to refresh.</h1> -->
    <p>
      <button
        @click="generateRandom"
        :disabled="isLoading"
        type="button"
        class="btn btn-primary"
      >
        Click to refresh
      </button>
    </p>
    <p v-if="errMsg" class="alert alert-danger" role="alert">
      <strong>Error!</strong>
      {{ errMsg }}
    </p>
    <!-- <p v-if="isLoading">Loading...<p> -->
    <svg
      v-if="randomText"
      class="spiral-svg"
      xmlns="http://www.w3.org/2000/svg"
      width="400"
      height="400"
      viewBox="0 0 800 800"
    >
      <path id="spiral" :d="paths" fill="none" />
      <text font-family="Verdana" font-size="24">
        <textPath xlink:href="#spiral">
          {{ randomText }}
        </textPath>
      </text>
    </svg>
  </div>
</template>

<script>
import getPath from "./../path-helper";
export default {
  data() {
    return {
      // randoms: [],
      randomText: "",
      paths: "",
      isLoading: false,
      errMsg: "",
    };
  },
  methods: {
    generateRandom: function () {
      // this.randomText = "Loading...";
      this.isLoading = true;
      this.paths = "";
      this.randomText = "";
      this.errMsg = "";
      // setTimeout(() => {
      axios
        .get("/api/random")
        .then((response) => response.data)
        .then((data) => {
          console.log(data);
          this.randomText = "";
          for (let i = 0; i < data.length; i++) {
            // console.log(data[i].values);
            this.randomText += data[i].values + " ";
            for (let j = 0; j < data[i].breakdowns.length; j++) {
              this.randomText += data[i].breakdowns[j].values + " ";
              // console.log(data[i].breakdowns[j].values);
            }
          }
          console.log(this.randomText);
          this.paths = getPath({ x: 400, y: 400 }, 0, 50, 0, 6 * 3600, 30);
          // console.log(this.path);
          this.isLoading = false;
        })
        .catch((err) => {
          this.paths = "";
          this.isLoading = false;
          this.errMsg = err.toString();
        });
      // }, 1000);
    },
  },
  mounted() {
    this.generateRandom();
  },
};
</script>