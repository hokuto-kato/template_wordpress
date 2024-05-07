import { common } from './common/common'
import imgsrc from '/assets/images/js.webp'

common()
console.log('console aaa')

// JSから画像を読み込むサンプル
const canvas = document.querySelector<HTMLCanvasElement>('#canvas')
const context = canvas!.getContext('2d')
const image = new Image(1000, 667)
image.src = imgsrc
image.addEventListener('load', () => {
  context?.drawImage(image, 0, 0, 1000, 667)
})
