import skprConfig from '@skpr/config';

export const getServerSideURL = () => {
  return skprConfig.get<string>('next.public_server_url') || 'http://localhost:3000'
}
