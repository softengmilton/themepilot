<template>
  <div class="min-h-screen bg-gray-100 p-6">
    <div class="mx-auto">
      <!-- Header -->
      <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-1">Gradient Generator</h1>
        <p class="text-gray-600">Create, preview and save custom gradients</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Gradient Controls -->
        <div class="lg:col-span-2 space-y-6">
          <div class="bg-white border border-gray-300 rounded-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-6">
              Create Gradient
            </h2>

            <!-- Gradient Direction -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700 mb-2">
                Gradient Type
              </label>
              <select v-model="gradient.type"
                class="w-full border border-gray-300 rounded px-3 py-2 text-sm">
                <option value="linear">Linear</option>
                <option value="radial">Radial</option>
              </select>
            </div>

            <!-- Gradient Angle (if linear) -->
            <div class="mb-4" v-if="gradient.type === 'linear'">
              <label class="block text-sm font-medium text-gray-700 mb-2">
                Angle (0–360°)
              </label>
              <input type="range" min="0" max="360" v-model="gradient.angle"
                class="w-full">
              <div class="text-sm text-gray-600">Angle: {{ gradient.angle }}°</div>
            </div>

            <!-- Color Pickers -->
            <div class="mb-4">
              <label class="block text-sm font-medium text-gray-700 mb-2">
                Colors
              </label>
              <div v-for="(color, index) in gradient.colors" :key="index"
                class="flex items-center gap-2 mb-2">
                <input type="color" v-model="gradient.colors[index]"
                  class="w-8 h-8 border rounded cursor-pointer" />
                <input type="text" v-model="gradient.colors[index]"
                  class="flex-1 border border-gray-300 rounded px-3 py-2 text-sm">
                <button v-if="gradient.colors.length > 2"
                  @click="removeColor(index)"
                  class="text-red-600 text-xs hover:underline">Remove</button>
              </div>
              <button @click="addColor"
                class="text-blue-600 text-xs hover:underline">+ Add Color</button>
            </div>

            <!-- Save Button -->
            <div class="flex justify-end">
              <button @click="saveGradient"
                class="px-5 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                Save Gradient
              </button>
            </div>
          </div>

          <!-- Gradient Preview -->
          <div class="bg-white border border-gray-300 rounded-md p-6">
            <h2 class="text-lg font-semibold mb-4">Live Preview</h2>
            <div class="h-40 w-full rounded-md border"
              :style="{ background: gradientCSS }"></div>
            <p class="mt-3 text-sm text-gray-600 break-all">
              {{ gradientCSS }}
            </p>
          </div>
        </div>

        <!-- Saved Gradients -->
        <div class="bg-white border border-gray-300 rounded-md p-6">
          <h2 class="text-lg font-semibold text-gray-800 mb-4">Saved Gradients</h2>
          <div v-if="savedGradients.length === 0" class="text-center py-12 text-gray-400">
            <p>No gradients saved yet</p>
          </div>
          <div v-else class="space-y-3">
            <div v-for="(g, index) in savedGradients" :key="index"
              class="border rounded p-3 cursor-pointer hover:bg-gray-50 transition"
              :class="{ 'border-blue-500 bg-blue-50': selectedGradientIndex === index }"
              @click="applyGradient(g, index)">
              <div class="flex justify-between items-center">
                <h3 class="font-medium text-gray-800 text-sm">Gradient {{ index + 1 }}</h3>
                <button @click.stop="deleteGradient(index)"
                  class="text-red-600 hover:underline text-xs">Delete</button>
              </div>
              <div class="h-12 rounded mt-2"
                :style="{ background: g.css }"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, computed } from "vue"

const gradient = reactive({
  type: "linear",
  angle: 90,
  colors: ["#6366F1", "#10B981"]
})

const savedGradients = ref([])
const selectedGradientIndex = ref(-1)

// Computed CSS string
const gradientCSS = computed(() => {
  if (gradient.type === "linear") {
    return `linear-gradient(${gradient.angle}deg, ${gradient.colors.join(", ")})`
  } else {
    return `radial-gradient(circle, ${gradient.colors.join(", ")})`
  }
})

// Add/Remove colors
const addColor = () => {
  gradient.colors.push("#F59E0B")
}
const removeColor = (index) => {
  gradient.colors.splice(index, 1)
}

// Save gradient
const saveGradient = () => {
  savedGradients.value.push({ ...gradient, css: gradientCSS.value })
}

// Delete gradient
const deleteGradient = (index) => {
  savedGradients.value.splice(index, 1)
}

// Apply gradient (load it back to editor)
const applyGradient = (g, index) => {
  gradient.type = g.type
  gradient.angle = g.angle
  gradient.colors = [...g.colors]
  selectedGradientIndex.value = index
}
</script>
